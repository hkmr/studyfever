import java.util.*;
class LowerCase{
	public static void main(String[] args) {
		Scanner	sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a lowercase character:");
		ch=sc.next(".").charAt(0);
		if(ch>=65 && ch<=90)
			System.out.println("Lowercase: "+(char)(ch+32));
		else
			System.out.println("Invalid Character");
	}
}