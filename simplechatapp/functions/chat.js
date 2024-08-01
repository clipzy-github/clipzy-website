exports.handler = async (event, context) => {
    const response = {
      statusCode: 200,
      body: JSON.stringify({ message: 'Hello from the chat function!' })
    };
    return response;
  };
  