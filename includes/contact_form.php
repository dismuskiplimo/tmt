<?php

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <title>Contact form</title>

  <link rel="stylesheet" href="css/reset.css">

  <script>
    window.console = window.console || function(t) {};
    window.open = function(){ console.log('window.open is disabled.'); };
    window.print = function(){ console.log('window.print is disabled.'); };
    // Support hover state for mobile.
    if (false) {
      window.ontouchstart = function(){};
    }
  </script>

</head>

<body>

  <div id="stage" class="stage"></div>

  <script src='js/react.js'></script>
  <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage('resize', "*");
    }
  </script>

  <script src="js/timeout.js"></script>
  <script>
    var NameInput = React.createClass({
    displayName: 'NameInput',
    handleTextChange: function () {
        var x = this.refs.nameField.getDOMNode().value;
        if (x != '') {
            this.refs.nameField.getDOMNode().className = 'active';
        } else {
            this.refs.nameField.getDOMNode().className = '';
        }
        this.props.onUserInput(x);
    },
    render: function () {
        return React.createElement('div', { className: 'control' }, React.createElement('input', {
            type: 'text',
            id: 'name',
            ref: 'nameField',
            placeholder: 'What should I call you?',
            autoFocus: true,
            required: true,
            onChange: this.handleTextChange
        }), React.createElement('label', { for: 'name' }, 'Name'));
    }
});
var EmailInput = React.createClass({
    displayName: 'EmailInput',
    handleTextChange: function () {
        var x = this.refs.emailField.getDOMNode().value;
        if (x != '') {
            this.refs.emailField.getDOMNode().className = 'active';
        } else {
            this.refs.emailField.getDOMNode().className = '';
        }
        this.props.onUserInput('', x);
    },
    render: function () {
        return React.createElement('div', { className: 'control' }, React.createElement('input', {
            type: 'email',
            id: 'email',
            ref: 'emailField',
            placeholder: 'Where can I reach you?',
            required: true,
            onChange: this.handleTextChange
        }), React.createElement('label', { for: 'email' }, 'e-mail'));
    }
});
var MessageArea = React.createClass({
    displayName: 'MessageArea',
    handleTextChange: function () {
        var x = this.refs.messageBox.getDOMNode().value;
        if (x != '') {
            this.refs.messageBox.getDOMNode().className = 'active';
        } else {
            this.refs.messageBox.getDOMNode().className = '';
        }
        this.props.onUserInput('', '', x);
    },
    render: function () {
        return React.createElement('div', { className: 'control' }, React.createElement('textarea', {
            id: 'message',
            ref: 'messageBox',
            placeholder: 'What\'s on your mind?',
            required: true,
            onChange: this.handleTextChange
        }), React.createElement('label', { for: 'message' }, 'Message'));
    }
});
var ContactForm = React.createClass({
    displayName: 'ContactForm',
    getInitialState: function () {
        return {
            nameText: '',
            emailText: '',
            messageText: ''
        };
    },
    handleUserInput: function (nameText, emailText, messageText) {
        this.setState({
            nameText: nameText,
            emailText: emailText,
            messageText: messageText
        });
    },
    render: function () {
        return React.createElement('form', { action: '/' }, React.createElement('fieldset', null, React.createElement('legend', null, 'Contact Form.'), React.createElement(NameInput, { onUserInput: this.handleUserInput }), React.createElement(EmailInput, { onUserInput: this.handleUserInput }), React.createElement(MessageArea, { onUserInput: this.handleUserInput }), React.createElement('input', {
            type: 'submit',
            value: 'send'
        })));
    }
});
React.render(React.createElement(ContactForm, null), document.getElementById('stage'));
  </script>

</body>

</html>
?>
