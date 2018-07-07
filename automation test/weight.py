from selenium.webdriver.common.by import By
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait as wait
import Login

#data
weight = 250

#login
user = Login.login
driver = user.data()

#navigate to weight menu
driver.find_element_by_id("wt_btn").click()
try:
    wait(driver, 10).until(EC.presence_of_element_located((By.ID, "WT_enter_btn")))
except:
    print("error at enter button")
finally:
    driver.find_element_by_id("WT_enter_btn").click()

#enter data
try:
    wait(driver, 10).until(EC.presence_of_element_located((By.ID, "wt_val")))
except:
    print("error at input")
finally:
    driver.find_element_by_id("wt_val").send_keys(weight)
    driver.find_element_by_id("wt_enter").click()

#handel alert
try:
    wait(driver, 10).until(EC.alert_is_present())
except:
    print ("error at alert")
finally:
    driver.switch_to.alert.accept()