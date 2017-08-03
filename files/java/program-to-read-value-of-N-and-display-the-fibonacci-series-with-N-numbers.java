import java.util.*;
class Fibonacci{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int temp,ctr,n=0,j=1;
		System.out.println("Enter no. of terms:");
		ctr=input.nextInt();
		while(ctr>0){
			System.out.println(n);
			temp=j;
			j=n;
			n=temp+j;
			ctr--;
		}
	}
}