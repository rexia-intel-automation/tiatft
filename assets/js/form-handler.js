document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("applyForm");
    const msg = document.getElementById("responseMessage");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        msg.textContent = "Submitting...";

        const formData = Object.fromEntries(new FormData(form).entries());
        formData.source = "tiaft_landing_waitlist";
        formData.timestamp = new Date().toISOString();
        formData.user_agent = navigator.userAgent;

        try {
            const res = await fetch(
                "https://primary-production-55af6.up.railway.app/webhook/b52b4ed4-caa5-409b-aadc-e5f920642add",
                {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(formData),
                }
            );

            if (res.ok) {
                msg.textContent = "Application submitted successfully!";
                form.reset();
            } else {
                msg.textContent = "Error submitting your application.";
            }
        } catch (err) {
            msg.textContent = "Network error.";
        }
    });
});
