from selenium import webdriver
import time

#user test values
first_name = "mason"
last_name = "white"
email = "masonwhite77@gmail.com"
password = "mas145"

#drivers
driver_path = r'C:\Users\Mason\Desktop\chromedriver.exe'
driver = webdriver.Chrome(driver_path)
driver.get("http://localhost/PhpProject30/index.php#!/")

#navigate to register
driver.find_element_by_id('register')

#enter value and press click
driver.find_element_by_id('fname').send_keys(first_name)
driver.find_element_by_id('lname').send_keys(last_name)
driver.find_element_by_id('email').send_keys(email)
driver.find_element_by_id('password').send_keys(password)
driver.find_element_by_id('register_btn').click()

#alert box
time.sleep(1)
msg = driver.switch_to.alert
if(msg.text == "Welcome to Track My Health"):
    print("test passed")
    msg.accept()
else:
    print("test failed")