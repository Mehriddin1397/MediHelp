@extends('layouts.admin')

@section('title', 'AIChat')

@section('content')
    <div class="container py-4">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between rounded-top-4">
                <h4 class="mb-0">🧠 Sun’iy intellektdan maslahat oling</h4>
                <small class="text-light">AI tibbiy yordamchi</small>
            </div>

            <div id="chat-box" class="card-body bg-light" style="height: 450px; overflow-y: auto; scroll-behavior: smooth;">
                <div class="text-center text-muted mt-5">
                    <i class="bi bi-robot" style="font-size: 2rem;"></i>
                    <p class="mt-2">Savolingizni yozing va sun’iy intellektdan maslahat oling!</p>
                </div>
            </div>

            <div class="card-footer bg-white border-top">
                <form id="chat-form" class="d-flex">
                    <input type="text" name="message" class="form-control me-2 rounded-pill" placeholder="Savolingizni yozing..." required>
                    <button class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-send"></i> Yuborish
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Chat script --}}
    <script>
        const form = document.getElementById('chat-form');
        const chatBox = document.getElementById('chat-box');

        function addMessage(sender, text, type) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('d-flex', 'mb-3', 'align-items-start');

            if (type === 'user') {
                messageDiv.classList.add('justify-content-end');
                messageDiv.innerHTML = `
                <div class="p-3 bg-primary text-white rounded-4" style="max-width: 70%;">
                    <strong>Siz:</strong> <br>${text}
                </div>
                <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="User" width="35" class="ms-2 rounded-circle border">
            `;
            } else {
                messageDiv.innerHTML = `
                <img src="https://cdn-icons-png.flaticon.com/512/4712/4712035.png" alt="AI" width="35" class="me-2 rounded-circle border">
                <div class="p-3 bg-white shadow-sm rounded-4" style="max-width: 70%;">
                    <strong>AI:</strong> <br>${text}
                </div>
            `;
            }

            chatBox.appendChild(messageDiv);
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const message = form.message.value.trim();
            if (!message) return;

            addMessage('user', message, 'user');
            form.reset();

            try {
                const response = await fetch("{{ route('ai.chat.send') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ message })
                });

                const data = await response.json();

                if (data.reply) {
                    addMessage('ai', data.reply, 'ai');
                } else {
                    addMessage('ai', 'Kechirasiz, hozircha javob bera olmadim.', 'ai');
                }
            } catch (error) {
                addMessage('ai', 'Xatolik yuz berdi. Iltimos, keyinroq urinib ko‘ring.', 'ai');
            }
        });
    </script>
@endsection
