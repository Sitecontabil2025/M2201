const fs = require("fs");
const path = require("path");

const projectRoot = __dirname;

const folders = ["assets/scss", "assets/css", "assets/js", "assets/images"];

folders.forEach(folder => {
    const folderPath = path.join(projectRoot, folder);
    if (!fs.existsSync(folderPath)) {
        fs.mkdirSync(folderPath, { recursive: true });
        console.log(`📂 Pasta criada: ${folderPath}`);
    }
});

const args = process.argv.slice(2);

const escritorio = args[0] || "Escritório Contábil";
const endereco = args[1] || "Nome da Rua, nº 00";
const bairro = args[2] || "Bairro";
const cidade = args[3] || "Cidade/UF";
const cep = args[4] || "CEP. 00000-000";
const mapaLink = args[5] || "https://maps.app.goo.gl/xxxxx";
const mapa = args[6] || "<iframe></iframe>";
const email = args[7] || "contato@dominio.com.br";
const telefone = args[8] || "(00) 0000-0000";
const whatsapp = args[9] || "(00) 9.0000-0000";
const facebook = args[10] || "https://www.facebook.com/";
const instagram = args[11] || "https://www.instagram.com/";
const linkedin = args[12] || "https://www.linkedin.com/";
const cor1 = args[13] || "#007381";
const cor2 = args[14] || "#8a8c4f";
const dominio = args[15] || "dominio.com.br";

// ===============
// ATUALIZAR dados.php
// ===============
const dadosPath = path.join(projectRoot, "dados.php");
let dadosContent = "";

if (fs.existsSync(dadosPath)) {
    dadosContent = fs.readFileSync(dadosPath, "utf8");
    dadosContent = dadosContent
        .replace(/\$escritorio\s*=\s*".*?";/, `$escritorio = "${escritorio}";`)
        .replace(/\$endereco\s*=\s*".*?";/, `$endereco = "${endereco}";`)
        .replace(/\$bairro\s*=\s*".*?";/, `$bairro = "${bairro}";`)
        .replace(/\$cidade\s*=\s*".*?";/, `$cidade = "${cidade}";`)
        .replace(/\$cep\s*=\s*".*?";/, `$cep = "${cep}";`)
        .replace(/\$mapa_link\s*=\s*".*?";/, `$mapa_link = "${mapaLink}";`)
        .replace(/\$mapa_iframe\s*=\s*'.*?';/, `$mapa_iframe = '${mapa}';`)
        .replace(/\$email\s*=\s*".*?";/, `$email = "${email}";`)
        .replace(/\$telefone\s*=\s*".*?";/, `$telefone = "${telefone}";`)
        .replace(/\$whatsapp\s*=\s*".*?";/, `$whatsapp = "${whatsapp}";`)
        .replace(/\$facebook\s*=\s*".*?";/, `$facebook = "${facebook}";`)
        .replace(/\$instagram\s*=\s*".*?";/, `$instagram = "${instagram}";`)
        .replace(/\$linkedin\s*=\s*".*?";/, `$linkedin = "${linkedin}";`);
} else {
    dadosContent = `<?php
$escritorio = "${escritorio}";
$endereco = "${endereco}";
$bairro = "${bairro}";
$cidade = "${cidade}";
$cep = "${cep}";
$mapa_link = "${mapaLink}";
$mapa_iframe = '${mapa}';
$email = "${email}";
$telefone = "${telefone}";
$whatsapp = "${whatsapp}";
$facebook = "${facebook}";
$instagram = "${instagram}";
$linkedin = "${linkedin}";
?>`;
}
fs.writeFileSync(dadosPath, dadosContent, "utf8");

// ===============
// ATUALIZAR enviar.php
// ===============
const enviarPath = path.join(projectRoot, "enviar.php");
let enviarContent = "";

if (fs.existsSync(enviarPath)) {
    enviarContent = fs.readFileSync(enviarPath, "utf8");
    enviarContent = enviarContent
        .replace(/mail->Host = ".*?";/, `mail->Host = "mail.${dominio}";`)
        .replace(/mail->Username = '.*?';/, `mail->Username = 'formulario@${dominio}';`)
        .replace(/mail->setFrom\('.*?'\);/, `mail->setFrom('formulario@${dominio}');`)
        .replace(/\$site = "https:\/\/.*?";/, `$site = "https://${dominio}";`)
        .replace(/\$destinatario = ".*?";/, `$destinatario = "${email}";`);
} else {
    enviarContent = `<?php
// enviar.php básico
$site = "https://${dominio}";
$destinatario = "${email}";
?>`;
}
fs.writeFileSync(enviarPath, enviarContent, "utf8");

// ===============
// ATUALIZAR _variables.scss
// ===============
const variablesPath = path.join(projectRoot, "assets/scss/_variables.scss");
let variablesContent = "";

if (fs.existsSync(variablesPath)) {
    variablesContent = fs.readFileSync(variablesPath, "utf8");
    variablesContent = variablesContent
        .replace(/\$primary:\s*.*?;/, `$primary:     ${cor1};`)
        .replace(/\$secondary:\s*.*?;/, `$secondary:   ${cor2};`);
} else {
    variablesContent = `// COLORS
$primary:     ${cor1}; 
$secondary:   ${cor2};`;
}
fs.writeFileSync(variablesPath, variablesContent, "utf8");

// ===============
// ATUALIZAR script.js
// ===============
const scriptJsPath = path.join(projectRoot, "assets/js/script.js");
let scriptJsContent = "";

if (fs.existsSync(scriptJsPath)) {
    scriptJsContent = fs.readFileSync(scriptJsPath, "utf8");
    scriptJsContent = scriptJsContent.replace(
        /location\.href\s*=\s*".*?"/,
        `location.href = "https://${dominio}"`
    );
} else {
    scriptJsContent = `$('#formcontato').on('submit', function (e) {
    e.preventDefault();
    // redirecionamento após envio bem-sucedido
    location.href = "https://${dominio}";
});`;
}
fs.writeFileSync(scriptJsPath, scriptJsContent, "utf8");

console.log("🚀 Build concluída e arquivos atualizados!");
