/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MyPackage;

import java.util.stream.Collectors;

/**
 *
 * @author Ikram
 */
public class Encryption {
    
    private static final int SWITCH_VALUE = 2;
    
    public static String encode(String iPassword){
        
        if(iPassword != null && !iPassword.isEmpty()){
            return iPassword.chars()
                    .mapToObj(x-> String.valueOf((char) ( (int) x + SWITCH_VALUE)))
                    .collect(Collectors.joining());
        }
        return iPassword;
        
    }
    
    public static String decode(String cryptedPass){
        
        if(cryptedPass != null && !cryptedPass.isEmpty()){
            return cryptedPass.chars()
                    .mapToObj(x-> String.valueOf((char) ( (int) x - SWITCH_VALUE)))
                    .collect(Collectors.joining());
        }
        return cryptedPass;
        
    }
    
}
