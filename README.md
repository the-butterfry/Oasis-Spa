# News
4/29/2019
_**THIS REPOSITORY IS ABANDONED. PLEASE SEE THE NEW PROJECT HERE: https://github.com/oasis-spa/oasis-spa-rpi **_

# Oasis-Spa
An MQTT Enabled Hot Tub controller for the Raspberry Pi

The Oasis Spa Controller was built on Rick Feenstra’s excellent project. (http://www.instructables.com/id/Hottub-Pool-Controller-Web-Interface/)  He built it for his own purposes, controlling a traditional Hot Tub with traditional pumps and heater. He built the website which controls the Raspberry Pi’s GPIO pins directly. The functionality is perfect, but I wanted to be able to use wireless IoT switches. Since my tub is an inexpensive inflatable model, and I’m using propane heat, my power requirements don’t get into high-voltage territory. Instead of re-writing the website’s functions to adapt it to MQTT communication we are running a program which listens to the state of the Raspberry’s GPIO pins. If this program detects that a change has been made from ON/OFF it will fire off the appropriate MQTT message to the device associated with that Pin. In this way the website will still function as Rick set it up to do, as well as adding new IoT functionality.

Currently, the process for assigning, and configuring MQTT devices is a manual one. You’ll have to edit the config file yourself for every device you want to add. It isn’t ideal, but I don’t have the scripting chops to make it happen via the website directly, maybe you do? This functionality is accomplished with the GitHub project: Hallonlarm (https://github.com/hemtjanst/hallonlarm). The program comes installed with the Oasis Spa Controller Raspberry Pi image. Your job will be to supply the MQTT Broker address and configure each MQTT device so the program knows how to communicate to/from and which pin it should be assigned to. Additionally, there is handy functionality that can invert ON/OFF (1/0) state.

_**Oasis Spa**_ is a lightweight Raspberry Pi based Hot Tub controller. Fully configurable with the following features

*  Automatic heating schedules
*  Time based schedules
*  Individual device schedules
*  Trigger Actions based on Temp
*  Overheat monitor 
*  Frost monitor
*  Temperature recording
*  Mobile optimized interface
*  MQTT device control
*  Based on a vanilla RPi Jessie
*  Standard GPIO control of anything a Raspberry Pi can access
*  Unlimited temperature sensors
*  Configurable views on the main page
*  Tablet optimized page
*  HTTP API for device/site/tub control
