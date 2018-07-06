from selenium import webdriver
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By as BY
from selenium.webdriver.support.ui import WebDriverWait as wait

import Login
user = Login.login
driver = user.data()

#data
glucose = 118

#navigate to data input
driver.find_element_by_id("bs_btn").click()
try:
    wait(driver, 10).until(EC.presence_of_element_located((BY.ID, "BS_enter_btn")))
except:
    print ("error loading bs menu")
finally:
   driver.find_element_by_id("BS_enter_btn").click()

#input data
try:
    wait(driver, 10).until(EC.presence_of_element_located((BY.ID, 'bs_val')))
except:
    print("error at view")
finally:
    driver.find_element_by_id('bs_val').send_keys(glucose)
    driver.find_element_by_id('bs_enter').click()

#handel alert
try:
    wait(driver, 10).until((EC.alert_is_present()))
except:
    print("error at alert")
finally:
    driver.switch_to.alert.accept()