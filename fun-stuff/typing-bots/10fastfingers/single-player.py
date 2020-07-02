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

# This is where the magic happens
def type(text_class, lower_delay, upper_delay):
    # Get the text
    text = driver.find_element_by_id(text_class).get_attribute("innerText")
    t_end = time.time() + 60

    for char in text:
        # Set a random delay
        delay = random.randint(lower_delay, upper_delay) / 1000

        # Check if the function has been running for 1 minute
        if time.time() < t_end:
            if char == "|":
                sleep(delay)
                keyboard.press_and_release('space')
            else:
                keyboard.write(char, delay)
        else:
            break

print("Press alt+z to start the bot")

# Call the type() function upon hitting the hotkey
while 1:
    keyboard.wait('alt+z')
    sleep(0.5)
    type("wordlist", 50, 55)
