# Ambil semua provinsi

curl -X GET http://localhost:8000/api/provinsi

# Tambah provinsi baru

curl -X POST http://localhost:8000/api/provinsi \
 -H "Content-Type: application/json" \
 -d '{"code":"99","name":"Provinsi Contoh"}'

# Ubah nama

curl -X PUT http://localhost:8000/api/provinsi/99 \
 -H "Content-Type: application/json" \
 -d '{"name":"Provinsi Contoh Update"}'

# Hapus

curl -X DELETE http://localhost:8000/api/provinsi/99
