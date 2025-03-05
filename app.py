from flask import Flask, render_template, jsonify
import json

app = Flask(__name__)

@app.route('/')
def index():
    try:
        # Ler o arquivo JSON com os valores do PIX
        with open("pix.json", "r", encoding="utf-8") as file:
            data = json.load(file)
        
        # Verificar se a chave "PIX_IMG" existe
        if "PIX_IMG" not in data:
            return jsonify({"erro": "Chave 'PIX_IMG' não encontrada no JSON"}), 400

        # Passar os valores para o template
        pix_img = data["PIX_IMG"]
        codigo_pix = data.get("CODIGO_PIX", "")

        return render_template('index.html', pix_img=pix_img, codigo_pix=codigo_pix)

    except Exception as e:
        return jsonify({"erro": str(e)}), 500

if __name__ == '__main__':
    app.run(debug=True)
