import java.util.*;

class larger
{
	public void sort(int A[],int len)
	{
		for(int i=0;i<len-1;i++)
		{
			for(int j=i+1;j<len;j++)
			{
				if(A[j]<A[i])
				{
					int temp=A[j];
					A[j]=A[i];
					A[i]=temp;
				}
			}
		}
	}
	
	public static void main(String args[])
	{
		Scanner sc=new Scanner(System.in);
		int n;
		System.out.println("Enter size ");
		n=sc.nextInt();
		int arr[]=new int[n];
		System.out.println("Enter "+n+" numbers");
		for(int i=0;i<n;i++)
			arr[i]=sc.nextInt();
		
		larger obj=new larger();
		obj.sort(arr,n);
		System.out.println("Second smaller element = "+arr[1]);
		
	}
}