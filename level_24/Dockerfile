FROM python:3.9.1
WORKDIR /app
COPY . .
RUN pip install -r requirements.txt
RUN useradd py-app
RUN chown py-app:py-app -R /app
USER py-app
EXPOSE 5000
CMD ["python", "/app/services/app.py"]