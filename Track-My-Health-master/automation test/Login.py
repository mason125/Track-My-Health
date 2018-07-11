from selenium import webdriver

class login:
    @classmethod
    #this method sets up the driver path
    def data(cls):
        driver_path = r'C:\Users\mxrac\Desktop\chromedriver.exe'
        driver = webdriver.Chrome(driver_path)
        driver.get("http://localhost/PhpProject30/index.php#!/")
        cls.log(driver)
        return (driver)

    @classmethod
    #this method inputs login data
    def log(cls,driver):
        email = "yy@yahoo.com"
        password = "12"
        driver.find_element_by_id("user_email").send_keys(email)
        driver.find_element_by_id("user_pass").send_keys(password)
        driver.find_element_by_id("enter").click()
        return

