/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package MyPackage;

/**
 *
 * @author Ikram
 */
public interface Constante {
    
    public final static String SPLITTER = "###########################################################";
   
    public final static String INTRODUCTION = "Welcome to my application";
    public final static String FIRST_INSTRUCTION = "Please select 1 to connect or 2 to register";
    public final static String SELECT_LOGIN = "Please enter your login";
    public final static String SELECT_PASSWORD = "Please enter your password";
    public final static String SUCCESS_REGISTRATION = "Congratulations, You have registred to my application";
    public final static String SUCCESS_CONNEXION = "Congratulations, You have connected to my application";
    public final static String USER_EXIST = "Login already taken, please choose another one";
    public final static String CONNEXION_FAILED = "Connexion failed, login or password is wrong";
    public final static String WRONG_OPTION = "Please select one of the following options !";
    public final static String NAME_APPLICATION = "Please enter the application's name";
    public final static String ALL_APPLICATIONS = "The name of all applications with a password are :";
    public final static String APPLICATION_REGISTRED = "The application has been registred";
    
    public final static String MENU = new StringBuilder()
            .append("Menu : \n")
            .append("   Select 1 to add an application with password \n")
            .append("   Select 2 to show the list of applications with password \n")
            .append("   Select 3 to get the password of an application \n")
            .append("   Select 4 to exit the application")
            .toString();
     
    public final static Integer MAX_TRY_CONNEXION = 5;
    
}
