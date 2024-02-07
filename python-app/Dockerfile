# image base
FROM python:3

# command to run
RUN apt-get update
RUN apt-get install libpq-dev -y
RUN mkdir /app

# container folder
WORKDIR /app

# coppy files to container
ADD . .

# install requirements
RUN pip install -r requirements.txt

# run app
CMD python app.py

# expose localhost:5000
EXPOSE 5000