import java.util.*;
class MonthDays{
	public static void main(String[] args) {
		Scanner sc=new Scanner(System.in);
		int year,feb;
		String month;
		System.out.print("Enter year and month: ");
		year=sc.nextInt();
		month=sc.next();
		if((year%400==0) || ((year%4==0) && (year%100!=0)))
			feb=29;
		else
			feb=28;
		switch(month){
			case "january":
				System.out.println("Number of Days: "+31);
				break;
			case "february":
				System.out.println("Number of Days: "+feb);
				break;
			case "march":
				System.out.println("Number of Days: "+31);
				break;
			case "april":
				System.out.println("Number of Days: "+30);
				break;
			case "may":
				System.out.println("Number of Days: "+31);
				break;
			case "june":
				System.out.println("Number of Days: "+30);
				break;
			case "july":
				System.out.println("Number of Days: "+31);
				break;
			case "august":
				System.out.println("Number of Days: "+31);
				break;
			case "september":
				System.out.println("Number of Days: "+30);
				break;
			case "october":
				System.out.println("Number of Days: "+31);
				break;
			case "november":
				System.out.println("Number of Days: "+30);
				break;
			case "december":
				System.out.println("Number of Days: "+31);
				break;
			default:
				System.out.println("Invalid Choice..!");
				
		}
	}
}