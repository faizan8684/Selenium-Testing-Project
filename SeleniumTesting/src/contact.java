import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

public class contact {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver", "/home/faizan/Videos/chromedriver");
		WebDriver driver=new ChromeDriver();
		driver.manage().deleteAllCookies();
		driver.manage().window().maximize();
		driver.get("http://localhost/Restaurant/loginpage.php");
		
		
		
		driver.findElement(By.id("username")).click();

	    driver.findElement(By.id("username")).sendKeys("faizan");
	    driver.findElement(By.id("password")).sendKeys("Akhtar@12");
	    driver.findElement(By.id("submit2")).click();
	    driver.findElement(By.linkText("Contact us")).click();
	    driver.findElement(By.name("query")).click();
	    driver.findElement(By.name("query")).sendKeys("Hello , Hi  Namsate!");
	    driver.findElement(By.name("submit")).click();
     	driver.switchTo().alert().accept();
		
	
     
		
	}

}