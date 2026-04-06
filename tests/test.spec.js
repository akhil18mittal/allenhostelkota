const { test, expect } = require('@playwright/test');

test('full UI test', async ({ page }) => {
  await page.goto('http://127.0.0.1:5500/index.html');

  await expect(page).toHaveTitle(/Prabhat Residency/);

  // empty form test
  await page.locator('text=Submit').click();

  // scroll & screenshot
  await page.mouse.wheel(0, 2000);
  await page.screenshot({ path: 'final-ui.png', fullPage: true });
});