/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MyPackage;

import java.util.Objects;

/**
 *
 * @author Ikram
 */
public class Authentification {
    
    private String user;
    private String password;
    
    public Authentification(String iUser, String iPassword){
        this.user = iUser;
        this.password = Encryption.encode(iPassword);
    }
    
    public String getUser(){
        return user;
    }
    
    public String getPassword(){
        return password;
    }
    
    public String getDecryptedPassword(){
        return Encryption.decode(password);
    }

    public void setUser(String user) {
        this.user = user;
    }

    public void setPassword(String password) {
        this.password = password;
    }
    
    
    @Override
    public boolean equals(Object iObject){
        
        if(iObject == null || iObject.getClass() != this.getClass()){
            return false;
        }
        
        if(iObject == this){
            return true;
        }
        
        Authentification other = (Authentification) iObject;
        
        
       return Objects.equals(user, other.getUser()) && Objects.equals(password,other.getPassword());  
            
    }
    
    @Override 
    public int hashCode(){
        return Objects.hash(user,password);
    }
    
}
