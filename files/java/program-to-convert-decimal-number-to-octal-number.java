

import java.util.*;

class Octal{
	public static void main(String args[]){
		Scanner sc = new Scanner (System.in);
		int num=sc.nextInt();
		int oct=0,i=0;
		
		while(num>0){
			int rem=num%8;
			oct = oct + rem * (int)Math.pow(10,i); //storing the value one by ones
			num/=8;
			i++;
		}
		System.out.println("Binary of given number = "+oct);
	}
}