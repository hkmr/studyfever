import java.util.*;
class UpperCase{
	public static void main(String[] args) {
		Scanner	sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a lowercase character:");
		ch=sc.next(".").charAt(0);
		if(ch>=97 && ch<=122)
			System.out.println("Uppercase: "+(char)(ch-32));
		else
			System.out.println("Invalid Character");
	}
}