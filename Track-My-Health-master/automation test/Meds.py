from selenium.webdriver.common import by as By
from selenium.webdriver.support.ui import WebDriverWait as wait
from selenium.webdriver.support import expected_conditions as EC
import Login
#case enter all three frequency

#data
med = "novalog 70/30"
mor = "35ml"
eve = "23ml"

#get driver
user = Login.login
driver = user.data()

#navigate to meds
try:
    wait(driver, 10).until(EC.presence_of_element_located(By.ID, "med_btn"))
except:
    print("error at navigation")
finally:
    driver.find_element_by_id("med_btn").click()

#navigate to entry
try:
    wait(driver, 10).until(EC.presence_of_element_located(By.ID, "med_enter_btn"))
except:
    print("error at med enter btn")
finally:
    driver.find_element_by_id("med_name").send_keys(med)

    #make frequency selection
    driver.find_element_by_id("mor").click()
    driver.find_element_by_id("eve").click()

    #send dosage to frequency times
    driver.find_element_by_id("mor_dose").send_keys(mor)
    driver.find_element_by_id("eve_dose").send_keys(eve)

#handel alert
try:
    wait(driver, 10).until(EC.alert_is_present())
except:
    print("error at input")
finally:
    driver.switch_to.alert.accept()
    print("test passed")


