/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MyPackage;

import static MyPackage.Constante.*;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;

/**
 *
 * @author Ikram
 */
public class Mymain {

    /**
     * @param args the command line arguments
     */
    
    private static Repository repository;
    private static Scanner sc;
    private static String currentUser;
    
    public static void main(String[] args) {
        
        sc = new Scanner(System.in);
        repository = Repository.getInstance();
        
        boolean isConnected = connection();
        
        if(!isConnected){
            sc.close();
            return;   
        }
        
        println(SPLITTER);
        println(SUCCESS_CONNEXION);
        println(SPLITTER);
        menu();    
    }
    
    private static boolean connection(){
        
        println(SPLITTER);
        println(INTRODUCTION);
        println(SPLITTER);
        
        String line = null;
        boolean isConnected = false;
        
        boolean optionSelected = false;
        
        while(!optionSelected){
            println(FIRST_INSTRUCTION);
            line = sc.nextLine().trim();
            if("1".equals(line) || "2".equals(line)){
                optionSelected = true;
            }
            
        }
        
        switch(line){
            case "2":
                register();
                isConnected = tryToConnect();
                break;
            case "1":
                isConnected = tryToConnect();
                break;
        }
                
        return isConnected;
        
    }
    
    private static void register(){
        
        String login = null;
        String password = null;
        
        boolean isLoginValid = false;
        String line;
        
        while(login == null || login.isEmpty()){
            println(SELECT_LOGIN);
            line = sc.nextLine();
            if(line!=null && !line.isEmpty() && !line.contains(" ")){
                if(!repository.isUserExist(line)){
                    login = line;
                }else{
                    println(USER_EXIST);
                }
                
            }
            
        }
        
        while(password == null || password.isEmpty()){
            println(SELECT_PASSWORD);
            line = sc.nextLine();
            if(line!=null && !line.isEmpty() && !line.contains(" ")){
                
                password = line;
            
            }
            
        }
        
        repository.insertUserRegistration(login, password);
        println(SPLITTER);
        println(SUCCESS_REGISTRATION);
        println(SPLITTER);
        
    }
    
    private static boolean tryToConnect(){
        
        int indexTry = 1;
        boolean isConnected = false;
        String login = null;
        String password = null;
        
        while(!isConnected && indexTry <= MAX_TRY_CONNEXION){
            println(SELECT_LOGIN);
            login = sc.nextLine();
            println(SELECT_PASSWORD);
            password = sc.nextLine();
            
            isConnected = repository.isUserAllowed(login, password);
            if(!isConnected){
                println(CONNEXION_FAILED);
            }
            
            indexTry++;
        }
        
        currentUser = login;
        
        return isConnected;
        
    }
    
    private static void menu(){
        
        String line;
        boolean exit = false;
        List<String> options = Arrays.asList("1","2","3","4");
        String application = null;
        
        while(!exit){
            println(MENU);
            print(">");
            line = sc.nextLine().trim();
            if(!options.contains(line)){
                println(WRONG_OPTION);
            }else{
                
                switch(line){
                                       
                    case "4" :
                        exit = true;
                        break;
                    case "3":
                        println(NAME_APPLICATION);
                        application = sc.nextLine();             
                        println(repository.getPassWordPerApp(application, currentUser));
                        break;
                    case "2" :
                        println(ALL_APPLICATIONS);
                        println(repository.getAllAplications(currentUser));
                        break;
                    case "1" :
                        String appToAdd = null;
                        while(appToAdd == null){
                            println(NAME_APPLICATION);
                            line = sc.nextLine();
                            if(line!=null && !line.isEmpty()){
                                appToAdd = line;
                            }
                        }
                        String password = null;
                        while(password == null){
                            println(SELECT_PASSWORD);
                            line = sc.nextLine();
                            if(line!=null && !line.isEmpty()){
                                password = line;
                            }
                        }
                        repository.insertUserPerAPP(appToAdd, currentUser, password);
                        println(APPLICATION_REGISTRED);
                        break;
                        
                        
                }
                
                
            }
            
            
        }
        
    }
    
    
    private static void println(String line){
        System.out.println(line);
        
    }
    
     private static void print(String line){
        System.out.print(line);
        
    }
      
}
