/* Checking prime number using the while loop upto to the half of given number if it founds
	any factor of number the loop will break displaying a message otherwise if() statement 
	outer the loop will check for it */

import java.util.*;
class PrimeNumber{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int num,i=2;
		System.out.print("Enter a number:");
		num=input.nextInt();
		while(num/2>=i){
			if(num%i==0){
				System.out.println(num+" is not prime number.");
				break;
			}
			i++;
		}
		if(num/2+1==i)
			System.out.println(num+" is prime number.");
		else if(num==1)
			System.out.println(num+" is not prime number.");//this statement is given only for 1 
	}
}