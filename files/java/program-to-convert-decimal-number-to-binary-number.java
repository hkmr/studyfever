
/*
#################
created by studyfever.net
#################
*/

import java.util.*;

class Binary{
	public static void main(String args[]){
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter a number");
		int num=sc.nextInt();
		int bin=0,i=0;
		
		while(num>0){	
			int rem=num%2;
			bin = bin + rem * (int)Math.pow(10,i); //storing the value one by ones
			num/=2;
			i++;
		}
		System.out.println("Binary of given number = "+bin);
	}
}


