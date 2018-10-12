import java.util.ArrayList;
import java.util.List;

public class ListSample{


	public static void main(String[] args){
		List<String>list = new ArrayList<String>();

		//値の記憶→add method
		list.add("1");
		list.add("2");
		list.add("3");
		list.add("4");
		list.add("5");

		//値の取得
		for(int i=0; i < list.size() -1;i++){
			//値の取得→get method.
			System.out.println(list.get(i));
		}

		//拡張for sentence.
		for(String s :list){
			System.out.println(s);
		}
	}
}
