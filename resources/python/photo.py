from picamera2 import Picamera2
import time

picam2 = Picamera2()

config = picam2.create_preview_configuration()
picam2.configure(config)
picam2.start()
time.sleep(2)

picam2.stop_preview()
picam2.start_preview()

picam2.capture_file("./public/garage.jpg")

picam2.stop_preview()
picam2.stop()
