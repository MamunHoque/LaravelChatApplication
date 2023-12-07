let rooms = {
    messages: [],
    newMessage: '',
    roomId: '',
    async fetchMessages() {
        await axios.get('/messages').then(response => {
            this.messages = response.data;
        }).catch(res => {
            this.messages = [];
        });
    },
    addMessage(message) {
        axios.post('/messages', {
            message
        }).then(response => {
            this.messages.push({
                message: response.data.message.message,
                user: response.data.user
            });
        });
    },
    sendMessage() {
        this.addMessage(this.newMessage);
        this.newMessage = '';
    },
    render: function () {
        let ctx = this;
        this.fetchMessages();
        console.log(this.roomId);
        Echo.channel('chat')
            .listen('MessageSentEvent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
            });
    }
}
