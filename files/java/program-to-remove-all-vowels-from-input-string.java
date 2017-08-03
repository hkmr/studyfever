import java.util.*;

class RemoveVowel
{
	public static void main(String agr[])
	{
		Scanner sc = new Scanner(System.in);
		System.out.println("Enter any string");
		String str=sc.next();
		
		char ch[]=str.toCharArray();
		char vow[]={ 'a','A','e','E','i','I','o','O','u','U' }; //vowel array
		first:
		for(int i=0;i<ch.length;i++){
			second:
			for(int j=0;j<vow.length;j++){
				if(ch[i] == vow[j])	//checks for the matching element in vowel array
					continue first;
			}
			System.out.print(ch[i]);
		}
	}
}