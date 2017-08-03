import java.util.*;
class stringChar{
		public static void main(String ar[]){
			Scanner sc=new Scanner(System.in);
			String str;
			System.out.print("Enter a string:");
			str=sc.next();
			for(int i=0;i<str.length();i++)
				System.out.println(str.charAt(i));
		}

}