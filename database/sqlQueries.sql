
class StackClass 
//Parameters that save on stack
{
	
 public int n, i, j, k;
 public int rtnAddress;
 public Paras(int n, int i, int j, int k, int ra)
	{
		this.n = n;
		this.i = i;
		this.j = j;
		this.k = k;
		rtnAddress=ra;
	}
} 

class StackX
{
 private int maxSize; //Size of StackX array
 private Paras[] stackArry;
 private int top; //Top of stack

//Override
public StackX(int s) //Method Signature
{
	maxSize = s; //Set array size
	stackArry = new Paras[maxSize]; //Create array
	top = -1; //No. of items yet
}
//
public void push(Paras p) //Putting item on top of stack
{
	stackArry[++top] = p; //Increment top, insert item
}

public Paras pop() //Take item from top of stack
{
	return stackArry[top--]; // access item, decrement top
}

public Paras peek() // peek at top of stack
{
	return stackArry[top];
}

public boolean isEmpty() 
 {
  if (top &lt;= 0)
	return true;
  else
	return false;
 }
} 
//End class StackX

public abstract class Towers {
private int src;
private int dest;
private int number;
Towers() {
src = 1;
dest= 3;
number= 3;
}
Towers(int number, int src, int dest) {
this.number = number;
this.dest = dest;
this.src = src;
}

public void setSrc(int src) {
if ((src &lt; 1) || (src &gt; 3))
System.out.println(&quot;Error: src must be 1, 2, or 3)&quot;);
else
this.src = src;
}
public void setDest(int dest) 
{
 if ((dest &lt; 1) || (dest &gt; 3))
	System.out.println(&quot;Error: dest must be 1, 2, or 3&quot;);
 else
	this.dest = dest;
}

public void setNumber (int number) 
{
	this.number = number;
}

public int getSrc() 
{
	return src;
}

public int getDest()
{
	return dest;
}

public int getNumber() 
{
	return number;
}

public void run()
{
	towers(number, src, dest);
}

abstract public void towers(int number, int serc, int dest);
}

public class Towers1 extends Towers 
{
	Towers1() {
	super();
	System.out.println(&quot;Towers Of Hanoi- solution #1&quot;);
}

Towers1(int n, int src, int dest)
{
	super(n, src, dest);
	System.out.println(&quot;Towers Of Hanoi- solution #1&quot;);
}

//move n disks from peg i to peg j

public void towers(int n, int i, int j) 
{
	Paras currentFrame = new Paras(3, 1, 3, 2, 7);
	Paras newFrame;
	int k;

	StackX theStack = new StackX(50);
	int codePart = 1;
	boolean continueStepping = true;
	while (continueStepping) 
	{
	switch (codePart) 
	{
		case 1: 
				theStack.push(currentFrame);
				codePart = 2;
				break;
		case 2: 
				currentFrame = theStack.peek();
				if (currentFrame.n == 1) 
				{
					System.out.println(&quot;move disk from &quot; + currentFrame.i + &quot; to &quot; + currentFrame.j);
					codePart = 6;
				}
				else 
				{
					currentFrame.k = 6 - currentFrame.i - currentFrame.j;
					codePart = 3;
				}
				break;
		case 3: // towers(n - 1, i, k);
				currentFrame = theStack.peek();
				newFrame = new Paras (currentFrame.n-1, currentFrame.i,
				currentFrame.k, currentFrame.k, 4);
				theStack.push(newFrame);
				codePart = 2;
				break;
		case 4: // move trivial case towers(1, i, j);
				currentFrame = theStack.peek();
				newFrame = new Paras (1, currentFrame.i, currentFrame.j,
				currentFrame.k, 5);
				theStack.push(newFrame);
				codePart = 2;
				break;
		case 5: // move from temp to final destination. towers(n-1, k, j); // move small pile to dest
				currentFrame = theStack.peek();
				newFrame = new Paras (currentFrame.n-1, currentFrame.k,
				currentFrame.j, currentFrame.k, 6);
				theStack.push(newFrame);
				codePart = 2;
				break;
		case 6: // method exit
				currentFrame = theStack.peek();
				codePart = currentFrame.rtnAddress;
				theStack.pop();
				break;
		case 7: // return point
				continueStepping = false;
				break;
	}
	}
}
}

public class Towers2 extends Towers 
{
	Towers2() {
	super();
	System.out.println(&quot;Towers Of Hanoi- solution #2&quot;);
}

Towers2(int n, int src, int dest) 
{
	super(n, src, dest);
	System.out.println(&quot;Towers Of Hanoi- solution #2&quot;);
}
//move n disks from peg i to peg j
public void towers(int n, int i, int j) 
{
	/*Caller, Callee*/
	int k;
	// stop recursion when moving only one disk
	if (n ==1)
	System.out.println(&quot;move disk from &quot; + i + &quot; to &quot; + j);
	else 
	{
		k = 6 - i - j; // i+j+k=6
		towers(n - 1, i, k); // move smaller pile away
		towers(1, i, j); // trivial move
		towers(n-1, k, j); // move small pile to dest
	}
}
}

public class TowersApp1 
{
public static void main(String args[]) 
{
	String usage = &quot;Usage: TowersApp1 [numberDisks srcPeg destPeg]&quot;;
	if (args.length == 0) 
	{
		Towers1 towers = new Towers1(3, 1, 3);
		towers.run();
	}
	else if (args. length == 3) 
	{
	try 
	{
		Integer n = new Integer(args[0]);
		Integer s = new Integer(args[1]);
		Integer d = new Integer(args[2]);
		Towers1 towers = new Towers1(d.intValue(), s.intValue(),

		d.intValue());
		towers.run();
	}
	catch (NumberFormatException e) {System.out.println(usage);}
	}
	else
		System.out.println(usage);

}
}