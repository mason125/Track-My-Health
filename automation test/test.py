from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait as wait
from selenium.webdriver.support import expected_conditions as EC
import Login

#values
topNum = 120
botNum = 80

#login data
user = Login.login
driver = user.data()

#naviagate to user's BP
driver.find_element_by_id("bp_btn").click();
try:
    wait(driver, 10).until(EC.presence_of_element_located((By.ID, "BP_enter_btn")))
except:
    print("error at sub menu")
finally:
    driver.find_element_by_id("BP_enter_btn").click()

#enter data
try:
    wait(driver, 10).until(EC.presence_of_element_located((By.ID, "topNumber")))
except:
    print("error at view")
finally:
    driver.find_element_by_id("topNumber").send_keys(topNum)
    driver.find_element_by_id("botNumber").send_keys(botNum)
    driver.find_element_by_id("bp_enter").click()

#handel alert
try:
    wait(driver, 10).until(EC.alert_is_present())
except:
    print("error at alert")
finally:
    driver.switch_to.alert.accept()