import java.util.*;
class fahToCel{
	public static void main(String ar[]){
		Scanner sc=new Scanner(System.in);
		Float fah,cel;
		System.out.print("Enter temperature in fahrenheit:");
		fah=sc.nextFloat();
		cel=(fah-32)*5/9;
		System.out.println("Celsius= "+cel);
	}
}