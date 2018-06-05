from selenium import webdriver
import time

#glucose test value
weight = 120

#drivers
driver_path = r'C:\Users\Mason\Desktop\chromedriver.exe'
driver = webdriver.Chrome(driver_path)
driver.get("http://localhost/PhpProject30/index.php#!/")

#navigate to diabetes log
driver.find_element_by_id('home').click()
driver.find_element_by_id('wt_btn').click()
driver.find_element_by_id('WT_enter_btn').click()

#enter value and press click
time.sleep(1)
txtbox = driver.find_element_by_id('wt_val')
txtbox.send_keys(weight)
driver.find_element_by_id('wt_enter').click()

#alert box
time.sleep(1)
msg = driver.switch_to.alert
if(msg.text == "Update Complete!"):
    print("test passed")
    msg.accept()
else:
    print("test failed")