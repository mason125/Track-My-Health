from selenium import webdriver
import time
path = r'C:\Users\Mason\Desktop\chromedriver.exe'

var = webdriver.Chrome(path)

var.get("http://localhost/PhpProject30/index.php#!/")

#enter blood pressure
var.find_element_by_id('home').click()
var.find_element_by_id('bp_btn').click()
var.find_element_by_id('BP_enter_btn').click()

#enter data and submit
time.sleep(.5)
topNum = var.find_element_by_id('topNumber')
botNum = var.find_element_by_id('botNumber')
topNum.send_keys(150)
botNum.send_keys(90)
var.find_element_by_id('bp_enter').click()
time.sleep(.5)

#alert handler
txt = var.switch_to.alert
if(txt.text == "Update Complete!"):
    print("test passed")
    txt.accept()
else:
    print("test failed!")