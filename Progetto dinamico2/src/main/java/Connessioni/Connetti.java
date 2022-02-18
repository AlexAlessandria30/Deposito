package Connessioni;

import java.sql.Connection;

import java.sql.DriverManager;
import java.sql.SQLException;

public class Connetti {
	
	public Connection connettiDB(){
		
		Connection connessione = null;
		
		String driver="com.mysql.cj.jdbc.Driver";
		String url="jdbc:mysql://localhost:3306/javaWeb";
		String user="root";
		String psw="rootroot";
	
		try {
			Class.forName(driver);
			connessione=DriverManager.getConnection(url, user, psw);
			
		} catch (ClassNotFoundException | SQLException e) {
			System.out.println("DATABASE OFF");
		}
		
		return connessione;
		
	}
}
