import java.util.*;
class Fibonacci_Nth{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int temp,ctr=1,n=0,j=1,output;
		System.out.println("Enter no. of terms:");
		output=input.nextInt();
		ctr=output;
		while(ctr>0){
			output=n;
			temp=j;
			j=n;
			n=temp+j;
			ctr--;
		}
		System.out.println("Nth Fibonacci number: "+output);
	}
}