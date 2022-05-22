# Multiple Sensors can be used to check with below code
# Magnetic Hall Sensor, Photo Resistor sensor
import RPi.GPIO as GPIO
from time import sleep

GPIO.setmode(GPIO.BCM)
GPIO.setup(17, GPIO.IN)

#this was the setup
while True:
    sensor=GPIO.input(17)
    if sensor==1:
        print("it not working")
        sleep(0.1)
    elif sensor==0:
        print("its working")
