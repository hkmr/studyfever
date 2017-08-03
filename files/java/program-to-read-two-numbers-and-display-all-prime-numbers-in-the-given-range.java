import java.util.*;
class PrimeRange{
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		int lower_lmt,upper_lmt;
		System.out.println("Enter lower and upper limit of range:");
		lower_lmt=input.nextInt();
		upper_lmt=input.nextInt();
		for(int num=lower_lmt;num<=upper_lmt;num++){
			int i=2;
			while(num/2>=i){
				if(num%i==0){
					break;
				}
				i++;
			}
			if(num/2+1==i)
				System.out.println(num+" is prime number.");
		}
	}
}