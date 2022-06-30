/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MyPackage;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Objects;
import java.util.stream.*;



/**
 *
 * @author Ikram
 */
public class Repository {
    
    // Constante
    private static final String APP_NOT_FOUND = "application not recognized";
    private static final String USER_NOT_FOUND = "user is not registred to this application";
    
    // the unique instance of repository during the life cycle of the application
    private static Repository repository;
    //collection of users allowed to connect to the Application
    private final List<Authentification> usersAccepted;
    // collection of users/passwords per Application
    private final Map<String,List<Authentification>> usersPerApp;
    
    // private constructor for the unique instance 
    private Repository(){
        usersAccepted = new ArrayList<>();
        usersPerApp = new HashMap<>();                
    }
  
    // static methode to get the unique instance of the repository (Singleton)
    public static Repository getInstance(){
        
        if(repository == null){
            synchronized(Repository.class){
                
                if(repository == null){
                    repository = new Repository();
                }
                
            }
            
        }
        return repository;
        
    }
    
    /**
     * get the password per User and Application
     * @param application
     * @param iUser
     * @return the password if the users is registred to the application 
     * otherwise return either Application not found our user not registred to the application
     */
    public String getPassWordPerApp(String application, String iUser){
        
        String password = null;
        
        if(usersPerApp.containsKey(application)){
            Authentification a =  usersPerApp.get(application)
                    .stream()
                    .filter(user -> Objects.equals(user.getUser(),iUser))
                    .findAny()
                    .orElse(null);
            
            
            password = (a ==null) ? USER_NOT_FOUND : a.getDecryptedPassword();
        }
               
        return password == null ? APP_NOT_FOUND : password;
    }
    
    /**
     * insert user in DB in order to be allowed to connect to our Application
     * @param iUser
     * @param iPassword
     * @return true if the inputs are valid 
     * otherwise return false
     */
    protected synchronized boolean insertUserRegistration(String iUser, String iPassword){
        
        
        if(isValid(iUser) && isValid(iPassword)){
                 
            return usersAccepted.add(new Authentification(iUser,iPassword));
                      
        }
        
        
        return false;
        
    }
    
    /**
     * insert in the DB to store the password per App per User
     * @param application
     * @param iUser
     * @param iPassword
     * @return true if the inputs are valid 
     * otherwise return false
     */
    protected synchronized boolean insertUserPerAPP(String application, String iUser, String iPassword){
        
        if(isValid(iUser) && isValid(iPassword)){
                 
            return usersPerApp.computeIfAbsent(application, x-> new ArrayList<>())
                    .add(new Authentification(iUser,iPassword));
                      
        }
        
        return false;
    }
    
    public boolean isUserExist(String iUser){
        
        return usersAccepted.stream().anyMatch(x-> x.getUser().equals(iUser));
        
    }
    
    public boolean isUserAllowed(String iUser, String iPassword){
        
        return usersAccepted.stream().anyMatch(x-> x.equals(new Authentification(iUser, iPassword)));
    }
    
    
   public String getAllAplications(String user){
       return usersPerApp.entrySet().stream()
               .filter(entry-> entry.getValue()
                                    .stream()
                                    .anyMatch(auth-> auth.getUser().equals(user)))
               .map(Map.Entry::getKey)
               .collect(Collectors.joining(", "));
   }
    
    
    
    /**
     * check if a String is valid
     * @param value
     * @return true if it is the case otherwise false
     */
    private static boolean isValid(String value){
        return value != null && !value.isEmpty();
    }  
    
    
    
    
}
