import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

public class testingselenium {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver", "/home/faizan/Videos/chromedriver");
		WebDriver driver=new ChromeDriver();
		driver.manage().deleteAllCookies();
		driver.manage().window().maximize();
		driver.get("http://localhost/Restaurant/index.php");
		
		
		WebElement name=driver.findElement(By.id("name"));
		name.sendKeys("Faiz");
		
		driver.findElement(By.id("mobileno")).sendKeys("9890677134");
		
		driver.findElement(By.id("email")).sendKeys("faizan@gmail.com");
		
		driver.findElement(By.id("pass1")).sendKeys("Akhtar@12");
		
		driver.findElement(By.id("rpass")).sendKeys("Akhtar@12");
		
		driver.findElement(By.id("dob")).sendKeys("25/12/1998");
		
		driver.findElement(By.id("username")).sendKeys("faizz");
		
		driver.findElement(By.id("submit1")).click();
		
		driver.findElement(By.id("gotologin")).click();
		driver.switchTo().alert().accept();
		
	
     
		
	}

}