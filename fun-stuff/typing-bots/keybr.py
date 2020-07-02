from selenium import webdriver
import keyboard
import random
from time import sleep

# Set webdriver to use
PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)
driver.maximize_window()

# Go to the site and get ready to type
driver.get("https://www.keybr.com/")
driver.find_element_by_class_name("Tour-close").click()
driver.find_element_by_class_name("TextInput.TextInput--sizeX0.TextInput--inactive").click()

# This is where the magic happens
def type(text_class, lower_delay, upper_delay):
    text = driver.find_element_by_class_name(text_class).text

    for char in text:
        # Set a random delay, the values inside randint are milliseconds
        delay = random.randint(lower_delay, upper_delay) / 1000

        # Keybr uses ␣ for spaces. So if ␣ occurs, type a space. Otherwise, write
        if char == "␣":
            sleep(delay)
            keyboard.press_and_release('space')
        else:
            keyboard.write(char, delay)

print("Press alt+z to start the bot")

# Call the type() function upon hitting the hotkey
while 1:
    keyboard.wait('alt+z')
    sleep(1)
    type("TextInput-fragment", 78, 82)
