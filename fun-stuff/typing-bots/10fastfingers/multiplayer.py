from selenium import webdriver
import keyboard
import random
import time
from time import sleep

# Set webdriver to use
PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)
driver.maximize_window()

# Go to the site and get ready to type
driver.get("https://10fastfingers.com/login")
sleep(1)
driver.find_element_by_id("CybotCookiebotDialogBodyLevelButtonAccept").click()
driver.find_element_by_id("UserEmail").click()
keyboard.write("yeezyyeety@outlook.com")
driver.find_element_by_id("UserPassword").click()
keyboard.write("Deltion1")
driver.find_element_by_id("login-form-submit").click()
driver.get("https://10fastfingers.com/multiplayer")
driver.switch_to.frame(driver.find_element_by_tag_name("iframe"))
driver.find_element_by_id("username").click()
keyboard.write("God")
driver.find_element_by_xpath("//input[@type='submit']").click()

# This is where the magic happens
def type(lower_delay, upper_delay):
    while 1:
        try:
            keyboard.write(driver.find_element_by_class_name("highlight").text)
            keyboard.press_and_release('space')
        except:
            break

print("Press alt+z to start the bot")

# Call the type() function upon hitting the hotkey
while 1:
    keyboard.wait('alt+z')
    sleep(0.5)
    type(50, 55)
