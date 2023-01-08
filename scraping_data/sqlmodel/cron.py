from apscheduler.schedulers.background import BackgroundScheduler
import time

import verifyLinks


scheduler = BackgroundScheduler(timezone="Africa/Tunis")
scheduler.start()

job = scheduler.add_job(verifyLinks,
                        trigger='cron',
                        id="1",
                        hour="8",
                        minute="00",
                        day="1"
                        )
print(job)

while True:
    time.sleep(1)
