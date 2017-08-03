import java.util.*;
class voting{
	public static void main(String ar[]){
		Scanner sc= new Scanner(System.in);
		int age;
		System.out.print("Enter age of a person:");
		age=sc.nextInt();
		if(age>=18)
			System.out.println("Person is eligible for voting");
		else
			System.out.println("Person is not eligible for voting");
		
	}
}