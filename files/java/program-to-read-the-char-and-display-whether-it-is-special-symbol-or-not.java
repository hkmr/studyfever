import java.util.*;
class specialSymbol{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		char ch;
		System.out.print("Enter a character:");
		ch=sc.next(".").charAt(0);
		if((ch<48 || ch>57) && (ch<65|| ch>90) && (ch<97 || ch>122))
			System.out.println("Character is Special Symbol");
		else
			System.out.println("Character is not Special Symbol");
	}
}