import java.util.*;
class LeapYear{
	public static void main(String[] args) {
		Scanner	sc=new Scanner(System.in);
		int year;
		System.out.print("Enter a year: ");
		year=sc.nextInt();
		if(  (year%400==0) || ((year%4==0) && (year%100!=0))   )
			System.out.println(year+" is leap year");
		else
			System.out.println(year+" is not leap year");
	}
}