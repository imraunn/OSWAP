from flask import *

app = Flask("SSTI",template_folder="/app/templates")

@app.route("/")
def home():
    if request.args.get('name'):
        text=render_template_string("Hey! Nice to meet you, "+request.args.get('name'))
        return render_template("index.html",prompt=text)
    else:
        return render_template("index.html", prompt="Send a GET request with your name!")

if __name__ == "__main__":
    app.run(host="0.0.0.0",debug=True)