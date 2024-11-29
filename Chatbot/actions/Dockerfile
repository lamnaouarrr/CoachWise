FROM rasa/rasa-sdk:latest

# Switch to root user
USER root

# Install pandas
RUN pip install pandas

# Switch back to non-root user
USER 1001

# Copy actions to the container
COPY ./actions /app/actions

CMD ["start", "--actions", "actions"]
