
public class Test {
	public static void main(String[]args){
		Person taro = new Person();
		taro.name = "山田太郎";
		taro.age = 19;
		taro.phoneNumber ="000-0000-0000";
		taro.address = "tokyo,Japan";
		taro.sex = "man";
		System.out.println(taro.name);
		System.out.println(taro.age);
		System.out.println(taro.phoneNumber);
		System.out.println(taro.address);
		System.out.println(taro.sex);

		taro.talk();
		taro.walk();
		taro.run();


		Robot aibo = new Robot();
		aibo.name = "aibo";
		aibo.talk();
		aibo.walk();
		aibo.run();

		Robot asimo = new Robot();
		asimo.name = "asimo";
		asimo.talk();
		asimo.walk();
		asimo.run();

		Robot pepper = new Robot();
		pepper.name = "pepper";
		pepper.talk();
		pepper.walk();
		pepper.run();

		Robot doraemon = new Robot();
		doraemon.name = "doraemon";
		doraemon.talk();
		doraemon.talk();
		doraemon.run();

	}

}
