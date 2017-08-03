import java.util.*;
import java.io.*;

class usingStack
{
	public static void main(String args[]) throws IOException
	{
			Stack<Integer> st=new Stack<>();
	
		int choice=0;
		int pos,element;
	
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
	
		while(choice<4)
		{
			System.out.println("STACK OPERATIONS ::");
			System.out.println("1 - Push operation");
			System.out.println("2 - Pop operation");
			System.out.println("3 - Search operation");
			System.out.println("4 - Exit");
			
			choice = Integer.parseInt(br.readLine());
			
			switch(choice)
			{
				case 1:
					System.out.println("Enter Element");
					element=Integer.parseInt(br.readLine());
					st.push(element);
						System.out.println("Added ! \n #################################");
					break;
					
				case 2:
					Integer obj=st.pop();
					System.out.println("Popped ="+obj+"\n #################################");
					break;
					
				case 3:
					System.out.println("Enter element for search");
					element =Integer.parseInt(br.readLine());
					pos =st.search(element);
					if(pos ==-1)
						System.out.println("Element Not Found \n #################################");
					else
						System.out.println("Position : "+pos+"\n #################################");
					break;
					
				default:
					return;
			}
			System.out.println("Stack content ="+st+"\n #################################");
		}
		
	}
}